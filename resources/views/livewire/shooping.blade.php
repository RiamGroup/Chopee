<div>
    <div class="container">
    <div class="row">
     <div class="col-3">
         <div class="card">
             <div class="card-header">
               KERANJANG
             </div>
             <div class="card-body">
                 {{$jumlah}}
             </div>
         </div>
         <div class="card">
             <div class="card-header">
               Belanjaan saya
             </div>
             <div class="card-body">
                 @foreach ($datas as $item)
                 <p> {{ $item->nama_barang}}</p>
                 @endforeach
         </div>
     </div>

     @foreach ( $datas as $row )
     <i>{{$row->nama_barang}}</i>

<button class="btn btn-primary" wire:click="destroy( {{ $row->id }} )" >Delete</button>
</p>
 @endforeach
</div>

<div class="col-9">
         <div class="card">
             <div class="card-header">
               Produk
             </div>
             <div class="card-body">
                 <div class="row">
                     <div class="col-3">
                         <div class="card">
                         <img src="{{ asset('gambar/miata4x4.jpg') }}" class="card-img-top"
                         alt="...">
                         <div class="card-body">
                         <h5 class="card-title">Mazda Miata na 1990</h5>
                         <p class="card-text">Mobil Tercantek</p>
                         </div>
                         <ul class="list-group list-group-flush">
                         <li class="list-group-item">Rp. 500.000.000</li>
                         </ul>
                         <div class="card-body">
                         <button class="btn btn-primary" wire:click="simpan('Mazda Miata na 1990', '500000000')">BELI</button>
                         </div>
                      </div>
                 </div>
                 <div class="col-3">
                     <div class="card">
                     <img src="{{ asset('gambar/raptor4x4.jpg') }}" class="card-img-top"
                     alt="...">
                     <div class="card-body">
                     <h5 class="card-title">Ford Raptor f150</h5>
                     <p class="card-text">Mobil Tergagah</p>
                     </div>
                     <ul class="list-group list-group-flush">
                     <li class="list-group-item">Rp. 1.000.000.000</li>
                     </ul>
                     <div class="card-body">
                     <button class="btn btn-primary"wire:click="simpan('Ford Raptor f150', '1000000000')">BELI</button>
                     </div>
                  </div>
             </div>

             <div class="col-3">
                <div class="card">
                <img src="{{ asset('gambar/swift.jpg') }}" class="card-img-top"
                alt="...">
                <div class="card-body">
                <h5 class="card-title">Suzuki Swift 2022</h5>
                <p class="card-text">Mobil Kota</p>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Rp. 250.000.000</li>
                </ul>
                <div class="card-body">
                <button class="btn btn-primary" wire:click="simpan('Suzuki Swift 2022', '250000000')">BELI</button>
                </div>
             </div>
        </div>

             <div class="col-3">
                 <div class="card">
                 <img src="{{ asset('gambar/supra.jpg') }}" class="card-img-top"
                 alt="...">
                 <div class="card-body">
                 <h5 class="card-title">Toyota Supra mk4</h5>
                 <p class="card-text">Mobil JDM</p>
                 </div>
                 <ul class="list-group list-group-flush">
                 <li class="list-group-item">Rp. 1.500.000.000</li>
                 </ul>
                 <div class="card-body">
                 <button class="btn btn-primary"wire:click="simpan('Toyota Supra mk4', '1500000000')">BELI</button>
                 </div>
              </div>
         </div>
             </div>
         </div>
     </div>
 </div>
