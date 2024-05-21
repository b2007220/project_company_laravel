<x-app-layout>
    <div class="note-container single-note">
        <div class="note-header">
            <h1>Note: {{ $note->created_at }}</h1>
            <div class="note-buttons">
                <a href="{{ route('notes.edit', $note) }}" class="note-edit-button">
                    Edit
                </a>
                <form action="{{ route('notes.destroy', $note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="note-delete-button">delete</button>
                </form>
            </div>
        </div>
        <div class="note">
            <div class="note-body">{{ $note->note }}</div>
        </div>
        </form>
    </div>
</x-layout>
