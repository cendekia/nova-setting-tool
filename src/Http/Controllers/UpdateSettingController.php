<?php

namespace Cendekia\SettingTool\Http\Controllers;

use Unisharp\Setting\Setting;

class UpdateSettingController extends BaseController
{
    protected $tool;

    public function __construct(Setting $tool)
    {
        $this->tool = $tool;
    }

    /**
     * Update setting.
     * @return void
     */
    protected function process($request): void
    {
        try {
            $this->tool->set('app', $request->get('app'));
            $this->tool->set('admin', $request->get('admin'));

            $this->setting = [
                'app' => $this->tool->get('app') ?? config('nova_setting.app'),
                'admin' => $this->tool->get('admin') ?? config('nova_setting.admin'),
            ];

            $this->message = 'The setting was updated. The page will refresh in few seconds...';
        } catch (\Exception $e) {
            $this->message = 'Uh-oh, unable to update setting.';
            $this->statusCode = 400;
        }
    }
}
