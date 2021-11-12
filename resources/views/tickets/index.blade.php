<x-app-layout>
    <x-slot name="header">
        @include('components.pageTitle',['title'=>'Dashboard'])
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex grid grid-flow-col justify-around">
                <div>Title</div>
                <div>Created at</div>
                <div>Author</div>
                <div>Assinee</div>
            </div>
            <div class="divide-blue-100 divide-y-2 gap-1 grid grid-cols-1 grid-flow-row">
                @foreach($tickets as $ticket)
                    <div class="divide-blue-200 divide-x-2 gap-1 grid grid-cols-4 grid-flow-row">
                        <div class="hover:bg-gray-500">
                            <a href="">{{$ticket->title}}</a>
                        </div>
                        <label class="flex justify-center hover:bg-gray-500">
                            <span class="md:hidden">{{__('Created at')}}</span>
                            <span>{{$ticket->created_at}}</span>
                        </label>
                        <label  class="flex justify-center hover:bg-gray-500">
                            <span class="md:hidden"> {{__('Author')}}</span>
                            <span>{{$ticket->Author->name}}</span>
                        </label>
                        <label  class="flex justify-center hover:bg-gray-500">
                            <span class="md:hidden">{{__('Assigned to')}}:</span>
                            <span>{{$ticket->Assignee->name}}</span>
                        </label>
                    </div>
                @endforeach
            </div>
            {{$tickets->links()}}
        </div>
    </div>
</x-app-layout>
