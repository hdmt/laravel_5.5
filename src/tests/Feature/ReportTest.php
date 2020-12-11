<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReportTest extends TestCase
{
    /**
     * @test
     */
    public function api_customersでGETでアクセスできる()
    {
        $response = $this->get('api/customers');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_customersでPOSTでアクセスできる()
    {
        $response = $this->post('api/customers');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_customers_customer_idでGET()
    {
        $response = $this->get('api/customers/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_customers_customer_idでPUT()
    {
        $response = $this->put('api/customers/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_customers_customer_idでDELETE()
    {
        $response = $this->delete('api/customers/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_reportsにGET()
    {
        $response = $this->get('api/reports');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_reportsでPOSTでアクセスできる()
    {
        $response = $this->post('api/reports');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_reports_report_idでGET()
    {
        $response = $this->get('api/reports/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_reports_report_idでPUT()
    {
        $response = $this->put('api/reports/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_reports_report_idでDELETE()
    {
        $response = $this->delete('api/reports/1');
        $response->assertStatus(200);
    }
}
