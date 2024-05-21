<x-app-layout>
    <div class="note-container">
        <a href="{{ route('notes.create') }}" class="new-note-btn">
            New note
        </a>
        <div class="notes">
            @foreach ($notes as $note)
                <div class="note">
                    <div class="note-body">
                        {{ Str::words($note->note, 30) }}

                    </div>
                    <div class="note-buttons">
                        <a href="{{ route('notes.show', $note) }}" class="note-edit-button">view</a>
                        <a href="{{ route('notes.edit', $note) }}" class="note-edit-button">edit</a>
                        <form action="{{ route('notes.destroy', $note) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="note-delete-button">delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $notes->links()}}
    </div>
</x-app-layout>
