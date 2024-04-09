
    <form action="{{ url('/detailsview/' . $data->id) }}" method="POST" enctype="multipart/form-data">
        <h1 class="text-2xl py-3 text-success font-semibold">Details Product</h1>
        <h2 class="text-2xl font-semibold mt-3 text-success">
            {{ $data->merek }}
        </h2>
        <span>{{ $data->model }}</span> ||
        <span>{{ $data->no_plat }}</span>
        <div>
            <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus dicta laudantium a fuga laborum
                necessitatibus animi magni. Quis, excepturi. Cupiditate inventore pariatur vero! Quod reprehenderit sapiente
                eum quibusdam dignissimos quas!</p>
        </div>
        <p>Rp.{{ $data->tarif }}</p>
    </form>
