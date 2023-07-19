<div>
<div class="card">
    <h5 class="card-header">Grup</h5>
    <div class="row px-4">
        <div class="col-lg-4 col-sm-5">
            <div class="mb-3">
                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example"
                    wire:model="baris">
                    <option value="15" selected>15 Baris</option>
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
                    <th>Nama</th>
                    <th>Jumlah kontak</th>
                    <th>ACTIONS</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($grup as $index => $item)
                <tr>
                    <th scope="row">{{ $grup->firstItem() + $index }}</th>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->jumlah}}</td>
                    <td>Table cell</td>

                </tr>
                @endforeach
                
            </tbody>
        </table>
        {{ $grup->links() }}
    </div>
</div>
</div>
