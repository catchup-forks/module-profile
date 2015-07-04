<div class="profile-partials">

    <div class="row">
        <div class="col-md-1"><img class="thumbnail" src="{{ array_get($user, 'avatar') }}" alt="{{ array_get($user, 'screenname') }} avatar"/></div>
        <div class="col-md-11"><h1>{{ array_get($user, 'screenname') }}</h1></div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <div class="panel-title">Profile</div>
                </div>
                <ul class="panel-body list-group">
                    <li class="list-group-item"><strong>Full Name</strong> {{ array_get($user, 'name') }}</li>
                    <li class="list-group-item"><strong>Last Login</strong> {!! array_get($user, 'last_logged_at.element') !!}</li>
                    <li class="list-group-item"><strong>Registered</strong> {!! array_get($user, 'registered.element') !!}</li>
                    <li class="list-group-item"></li>
                </ul>
            </div>
        </div>

        <div class="col-sm-8">

        </div>
    </div>

</div>
{!! \Debug::dump($user, ''); !!}
