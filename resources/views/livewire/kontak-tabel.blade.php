<div>
    {{-- <div class="row mb-4"> --}}
        <div class="card">
            <h5 class="card-header">Kontak</h5>
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
        <table class="table mb-4" wire:loading.table>
            
            <thead>
                <tr class="text-nowrap">
                    <th>#</th>
                    <th>Nama</th>
                    <th>Nomor</th>
                    <th>grup</th>
                    <th>Status</th>
                    <th>Aktion</th>
    
                </tr>
            </thead>
            <tbody>
            
                {{-- @dd($kontak); --}}
                @foreach ($kontak as $index => $item)
                <tr>
                    <th scope="row">{{ $kontak->firstItem() + $index }}</th>
                    <td>{{$item->kon_nama}}</td>
                    <td>{{$item->kon_nomor}}</td>
                    <td>{{$item->g_nama}}</td>
                    <td>
                        @if ($item->kon_status == 200)
                            <span class="badge bg-label-success"><i class='bx bx-message-rounded-check'></i></span>
                        @endif
                        @if ($item->kon_status == 404)
                            <span class="badge bg-label-danger"><i class='bx bx-message-alt-x'></i></span>
                        @endif
                        @if ($item->kon_status == 100)
                            <span class="badge bg-label-secondary"><i class='bx bx-message-rounded-error'></i></span>
                        @endif
                    </td>
                    <td>
                        <div class="demo-inline-spacing">
                            <button type="button" class="btn btn-xs btn-icon btn-outline-primary">
                                <span class="tf-icons bx bx-pie-chart-alt"></span>
                            </button>
                            <button type="button" class="btn btn-xs btn-icon btn-outline-primary">
                                <span class="tf-icons bx bx-pie-chart-alt"></span>
                            </button>
                        </div>
                    </td>
    
                </tr>
                @endforeach
    
            </tbody>
        </table>
        {{ $kontak->links() }}
    </div>
    </div>
    {{-- </div> --}}
</div>
