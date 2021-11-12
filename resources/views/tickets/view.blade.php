<x-app-layout>
    <x-slot name="header">
        @include('components.pageTitle',['title'=>'Dashboard'])
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <article>
                <h3 class="mb-3 text-2xl">{{$ticket->title}}</h3>
                <p>
                    {{$ticket->text}}
                </p>
            </article>

        @livewire('tickets.edit-form')
        </div>
    </div>
</x-app-layout>
