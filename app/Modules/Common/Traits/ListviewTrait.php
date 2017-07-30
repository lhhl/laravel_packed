<?php

namespace App\Modules\Common\Traits;

use Illuminate\Http\Request;
use App\Events\BeforeRenderForm;

trait ListviewTrait
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $model = $this->model;
        $data = $this->data;
        $records = $model::listview()->get();
        $firstRecord = (empty($records->all())) ? [] : $records->toArray()[0];
        $data['headerCols'] = array_keys($firstRecord);
        $data['records'] = $records;
        return view($this->view, $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $this->data;
        $data = $this->customFormData($data);
        return view($this->form, $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateRequest($request);
        $model = $this->model;
        $model::create($request->except(['_token', 'submit']));
        return redirect()->route($this->data['routeName'] . '_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = $this->model;
        $data = $this->data;
        $data['record'] = $model::find($id);
        return view('Common::templates.info', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->data;
        $data = $this->customFormData($data);
        $model = $this->model;
        $data['record'] = $model::find($id);
        $data['idUpdate'] = $id;
        return view($this->form, $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validateRequest($request);
        $model = $this->model;
        $model::where('id', $id)
                ->update($request->except(['_token', 'submit']));
        return redirect()->route($this->data['routeName'] . '_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = $this->model;
        $model::destroy($id);
        return redirect()->route($this->data['routeName'] . '_index');
    }

    /**
    * Request Validation.
    *
    * @param  Request  $request
    * @return void
    */
    public function validateRequest($request)
    {
        if (isset($this->validate) && ! empty($this->validate)) {
            $this->validate($request, $this->validate);
        }
    }

    /**
    * Custom form data.
    *
    * @param  array  $data
    * @return array
    */
    public function customFormData($data)
    {
        return $data;
    }
}
