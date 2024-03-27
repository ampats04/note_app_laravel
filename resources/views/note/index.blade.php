<x-layout>
    <div>
        <div><a href = '{{ route('note.create') }}' class ='note-new-button'>New Notes</a></div>
        @foreach ($notes as $note)
            <div>
                <div>
                    {{ Str::words($note->note, 30) }}
                </div>
                <div>
                    <a href='{{ route('note.show', $note) }}' class= 'note-edit-button'>View</a>
                    <a href = '{{ route('note.edit', $note) }}' class ='note-edit-button'>Edit</a>
                    <button class = 'note-delete-button'>Delete</button>
                </div>
            </div>
        @endforeach

    </div>
</x-layout>
