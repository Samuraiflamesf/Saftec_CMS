@extends('layouts.app')

@section('title', 'Ramais')

@section('content')
    <div class="m-8">
        <div class="flex justify-center items-center">
            <div class="text-center max-w-6xl mx-10">
                <h1 class="my-3 text-3xl font-bold tracking-tight text-slate-900 md:text-4xl">
                    Lista de Telefones
                </h1>
            </div>
        </div>
        <!-- Lista de Ramais -->
        <div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-32 ">
            <table class="w-full table-fixed">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="w-3/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Setor</th>
                        <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Telefone</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr class="hover:bg-gray-300">
                        <td class="py-4 px-6 border-b border-gray-200">John Doe</td>
                        <td class="py-4 px-6 border-b border-gray-200">555-555-5555</td>
                    </tr>
                    <tr class="hover:bg-gray-300">
                        <td class="py-4 px-6 border-b border-gray-200">John Doe</td>
                        <td class="py-4 px-6 border-b border-gray-200">555-555-5555</td>
                    </tr>
                    <tr class="hover:bg-gray-300">
                        <td class="py-4 px-6 border-b border-gray-200">John Doe</td>
                        <td class="py-4 px-6 border-b border-gray-200">555-555-5555</td>
                    </tr>
                    <tr class="hover:bg-gray-300">
                        <td class="py-4 px-6 border-b border-gray-200">John Doe</td>
                        <td class="py-4 px-6 border-b border-gray-200">555-555-5555</td>
                    </tr>
                    <!-- Add more rows here -->
                </tbody>
            </table>
        </div>
    </div>

@endsection
