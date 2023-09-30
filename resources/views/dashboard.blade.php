<x-app-layout>
    <x-slot name="header">
        <h2 class="font-regula text-xl text-gray-800 leading-tight">
            {{-- <nav>
                <ul>
                    <li><a href="{{ route('body.show') }}">แสดงข้อมูล</a></li>
                    <li><a href="{{ route('body.insert') }}">เพิ่มข้อมูล</a></li>
                    @if ($bodyData && !$bodyData->isEmpty())
                        <li><a href="{{ route('body.edit', ['id' => $bodyData->last()->id]) }}">แก้ไขข้อมูล</a></li>
                    @endif
                </ul>
            </nav> --}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
