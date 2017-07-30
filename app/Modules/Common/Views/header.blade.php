<div class="m-navbar">
    <div class="menu-hitpoint"></div>
    <div class="icon-hamburger"></div>

    <div class="m-avatar">
        <div class="title m-tooltip">{{ config('app.name', 'Laravel') }}
            <br/>
            <span class="sub-title">Hi {{ Auth::user()->name }}
                <div class="tooltip-panel tooltip-small">
                    <div class="l-row">
                        <div class="l-col-3">
                            <ul class="content">
                                <li><a href="">Edit Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </span>
        </div>
        <div class="avatar-user">
            <img src="https://appzocial-common-config.s3.amazonaws.com/icons/anomo.png" alt="" />
        </div>
    </div>
</div>
