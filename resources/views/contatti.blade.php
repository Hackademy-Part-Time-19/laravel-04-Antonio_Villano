<x-layout>
    <h1>Form Di Contatto</h1>
   <x-success></x-success>
   @if (session()->has('error'))
   <h2 class="alert alert-danger">{{session('error')}}</h2>
   @endif
    <form action="{{route('contacts.send')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input name="name" type="name" class="form-control" id="name" >
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="email" >

        </div>
        <div class="mb-3 form-check">
            <label class="form-check-label" for="description">Descrizione</label>
            <input name="description" type="textarea" class="form-control" id="description">

        </div>
        <button type="submit" class="btn btn-primary">Invia Richiesta</button>
    </form>
</x-layout>