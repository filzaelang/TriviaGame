<!-- resources/views/questions/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Pertanyaan</h2>
    <a href="{{ route('questions.create') }}" class="btn btn-primary mb-2">Tambah Pertanyaan</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Pertanyaan</th>
                <th scope="col">Jawaban Benar</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($questions as $question)
                <tr>
                    <th scope="row">{{ $question->id }}</th>
                    <td>{{ $question->question }}</td>
                    <td>
                        @if ($question->answers->where('is_correct', true)->isNotEmpty())
                            {{ $question->answers->where('is_correct', true)->first()->answer }}
                        @else
                            Belum ditentukan
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('questions.show', $question->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('questions.destroy', $question->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pertanyaan ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
