<?php

namespace Tests\Feature;


use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
// use Laravel\BrowserKitTesting\TestCase;
// use PHPUnit\Framework\TestCase;
use App\Models\Supplier;

class ManageUnitTest extends TestCase
{
    use WithFaker;
    /**
     * @test
     */
    public function testIndexSupplier()
    {
        // $supplier = factory(Supplier::class)->create();

        // $this->visit('supplier')
        //      ->see('Hello, '.$supplier);
        // $this->get('/')->assertResponseOk();
    }

    public function testOpenImportSupplier()
    {
        $this->visit('supplier/import')
         ->attach('file', 'file');
    }
    
    public function testChooseImportSupplier()
    {
        $this->visit('supplier/import')
         ->attach('file', 'file')
         ->select('code', 'code')
         ->select('name', 'name')
         ->select('address', 'address')
         ->select('phone', 'phone')
         ->press('Import');
    }

    public function testSuccessImportSupplier()
    {
        $this->visit('supplier/import')
         ->attach('file', 'file')
         ->select('code', 'code')
         ->select('name', 'name')
         ->select('address', 'address')
         ->select('phone', 'phone')
         ->press('Import')
         ->seePageIs('/supplier/import');
    }

    public function testFailsImportSupplier()
    {
        $this->visit('supplier/import')
         ->attach('file', 'file')
         ->press('Import')
         ->see('Data Supplier gagal di impor!');
        // $this->get('/')->assertResponseOk();
    }
}
