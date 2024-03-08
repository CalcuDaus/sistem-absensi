    @extends('template.main')
   
    @section('content')
           <!-- section title -->
   <section class="container title-container">
       <article class="row">
           <div class="col">
               <h2>{{$title}}</h2>
           </div>
       </article>
   </section>
   <!-- end section title -->
   <!-- section main content -->
   <section class="container container-content">
    <h2>Sekolah</h2>
      <div class="row w-75">
            <div
              class="col custom-card shadow-card overflow-x-auto position-relative"
            >
              <div class="mt-2">
                <a href="#" class="btn btn-primary mb-3"><i class="fa-solid fa-plus bold"></i> Tambah</a>
                <table id="example" class="display hover" style="width: 100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Sekolah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <body>
                      <?php $i = 1;?>
                        @forelse ($dt_sekolah as $s)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$s['sekolah']}}</td>
                          <td><a href="#" class="btn btn-info"><i class="fa-solid fa-pen text-white"></i></a >
                            <a href="#" class="btn btn-danger"><i class="fa-solid fa-eraser text-white"></i></a ></td>
                      </tr>
                        @empty
                            <tr>
                              <td colspan="2">Data Sekolah Tidak Tersedia</td>
                            </tr>
                        @endforelse
                    </body>
                    <tbody></tbody>
                </table>
              </div>
            </div>
          </div>
          
   </section>
   <!-- end section main content -->
    @endsection
