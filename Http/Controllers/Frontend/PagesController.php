<?php namespace Cms\Modules\Profile\Http\Controllers\Frontend;

use Cms\Modules\Auth\Models\User;

class PagesController extends BaseController
{

    public function getProfile(User $user)
    {
        $this->setLayout('1-column');
        $this->theme->asset()->add('profile_partials', 'modules/profile/css/partials.css', ['theme']);

        return $this->setView('frontend.pages.profile', [
            'user' => $user->transform()
        ]);
    }


}
