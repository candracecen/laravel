<div>{{-- Pembungkus  --}}
<div class="row">

    <div class="col-lg-4 col-sm-5"> 
        <div class="mb-3">
            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" wire:model="baris">
                <option value ="15" selected>15 Baris</option>
                <option value="50">50 Baris</option>
                <option value="100">100 Baris</option>
            </select>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="input-group input-group-merge">
            <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
            <input type="text" wire:model='search' class="form-control" placeholder="Search..." aria-label="Search..."
                aria-describedby="basic-addon-search31" />
        </div>
    </div>
</div>
<div class="table-responsive text-nowrap">
    <table class="table mb-4">
        <thead>
            <tr class="text-nowrap">
                <th>#</th>
                <th>Nomor</th>
                <th>Pesan</th>
                <th>Tanggal</th>

            </tr>
        </thead>
        <tbody>
            
            @foreach ($terkirim as $index => $item)
            <tr>
                <th scope="row">{{ $terkirim->firstItem() + $index }}</th>
                <td>{{$item->nomor}}</td>
                <td>{{$item->pesan}}</td>
                <td>{{$item->created_at->format('d-m-Y H:i')}}</td>

            </tr>
            @endforeach

        </tbody>
    </table>
        {{ $terkirim->links() }}
</div>
</div>