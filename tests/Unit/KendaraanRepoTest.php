<?php
namespace Tests\Feature\App\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\ModelKendaraan;
use Mockery as m;
use App\Src\KendaraanRepo;
use App\Src\Contract\KendaraanRepoInterface;


class KendaraanRepoTest extends TestCase
{
  protected $repository, $expectations;
    public function setUpResults()
    {
      return [
        'getAllx' => [
          [
            'merk_kenderaan'  => 'Honda',
            'warna_kenderaan' => 'Hitam',
            'stok_kendaraan'  => 100,
            'tahun_produksi'  => 2007,
          ],
          [
            'merk_kenderaan'  => 'Suzuki',
            'warna_kenderaan' => 'putih',
            'stok_kendaraan'  => 20,
            'tahun_produksi'  => 200,
          ],
        ],
      ];
    }
    protected function setUp(){
      parent::setUp();
      $this->expectations = $this->setUpResults();

      $model = m::mock(ModelKendaraan::class)
      ->shouldReceive('all')
      ->andReturn($this->expectations['getAllx'])->mock();

      $this->repository = new KendaraanRepo($model);
    }

    public function testConstructor()
    {
      $this->assertInstanceOf(KendaraanRepoInterface::class, $this->repository);
    }

    public function testGetAll(){
      $results = $this->repository->getAll();
      $this->assertEquals($results, $this->expectations['getAllx']);
    }
    public function testCreate()
    {
      $this->createrepo = m::mock(ModelKendaraan::class);
      $this->repository = new KendaraanRepo($this->createrepo);
      $data = [
        'merk_kenderaan'  => 'Toyota',
        'warna_kenderaan' => 'Yellow',
        'stok_kendaraan'  => 10,
        'tahun_produksi'  => 230,
      ];
      $value = m::mock(ModelKendaraan::class);

      $value->shouldReceive('getMerkKendaraan')->andReturn($data['merk_kenderaan'])
            ->shouldReceive('getWarnaKendaraan')->andReturn($data['warna_kenderaan'])
            ->shouldReceive('getStokKendaraan')->andReturn($data['stok_kendaraan'])
            ->shouldReceive('getTahunProduksi')->andReturn($data['tahun_produksi']);

      $this->createrepo->shouldReceive('create')->with($data)->andReturn($value);

      // $result = $this->repository->create($value);
      // $this->assertEquals($value,$result);
    }

    public function testDelete()
    {
        $delete = m::mock(ModelKendaraan::class);
        $delete->shouldReceive('id')->andReturn(1);
        $this->repository->shouldReceive('delete')->with(1)->andReturn(true);
        $result = $this->repository->delete($delete);
        $this->assertTrue($result);
    }

    // public function testInitialization()
    // {
    //   $kendaraan = factory(ModelKendaraan::class)->make()->toArray();
    //   // $kendaranRepo =new KendaraanRepo($kendaraan);
    // }
}
