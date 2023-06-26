<?php

namespace Tests\Feature;

use App\Modules\Admin\AdminEmployee\BossesController;
use Illuminate\Support\Facades\App;
use LaravelCommonNew\RouterTools\RouterToolsServices;
use PhpOffice\PhpWord\Exception\Exception;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * @return void
     * @throws Exception
     */
    public function testPDF(): void
    {
        $snappy = App::make('snappy.pdf');
        $html = file_get_contents('storage/pdf/test.html');
        $uid = uniqid();
        $snappy->generateFromHtml($html, "storage/pdf/pdf-$uid.pdf");
    }

    public function testRouterHelper()
    {
        dump(BossesController::class);
        RouterToolsServices::AutoGenRouters(null);
    }
}
