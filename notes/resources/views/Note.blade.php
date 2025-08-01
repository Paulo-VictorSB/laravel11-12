<div class="row">
    <div class="col">
        <div class="card p-4">
            <div class="row">
                <div class="col">
                    <h4 class="text-info">{{ $note['title'] }}</h4>
                    <small class="text-secondary"><span class="opacity-75 me-2">Created
                            at:</span><strong>{{ date('d-m-Y H:i:s', strtotime($note['created_at'])) }}</strong></small>
                    @if($note['updated_at'] != $note['created_at'])
                        <small class="text-secondary ms-5"><span class="opacity-75 me-2">Last update:</span><strong>{{ date('d-m-Y H:i:s', strtotime($note['updated_at'])) }}</strong></small>
                    @endif
                </div>
                <div class="col text-end">
                    <a href="{{ Route('edit', ['id' => Crypt::encrypt($note['id'])]) }}" class="btn btn-outline-secondary btn-sm mx-1"><i
                            class="fa-regular fa-pen-to-square"></i></a>
                    <a href="{{ Route('delete', ['id' => Crypt::encrypt($note['id'])]) }}" class="btn btn-outline-danger btn-sm mx-1"><i
                            class="fa-regular fa-trash-can"></i></a>
                </div>
            </div>
            <hr>
            <p class="text-secondary">
                {{ $note['text'] }}
            </p>
        </div>
    </div>
</div>
