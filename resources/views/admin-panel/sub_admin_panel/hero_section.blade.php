<div id="item-4" class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <span class="fs-5">Hero Section</span>
    </div>
    <div class="card-body">
        <form action="{{ route('updateHeroSection') }}" method="post" enctype='multipart/form-data'>
            @csrf
            <div class="mb-3">
                <label for="input_judul_header" class="form-label">Header Hero</label>
                <input type="text" class="form-control" id="input_judul_header"
                       name="input_judul_header" value="{{ $dataHeroSection->header }}">
            </div>
            <div class="mb-3">
                <label for="input_deskripsi_header" class="form-label">Example textarea</label>
                <textarea class="form-control" id="input_deskripsi_header"
                          name="input_deskripsi_header" rows="5">{{ $dataHeroSection->paragraph }}</textarea>
            </div>
            <div class="mb-3">
                <label for="input_bg_hero" class="form-label">Background Hero</label>
                <div class="p-3 border mb-2 border-1 w-100 d-flex justify-content-center">
                    <img src="{{asset($dataHeroSection->bg_image)}}" alt="bg image" style="width: 80%">
                </div>
                <input type="file" class="form-control" id="input_bg_hero"
                       name="input_bg_hero">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
