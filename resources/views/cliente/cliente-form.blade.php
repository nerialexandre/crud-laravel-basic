<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="title-cliente" style="background-color: #d8d8d8; padding: 10px;">
                   <span>Clientes</span>
                    <a href="{{url('clientes')}}" style=" color: rgb(72, 72, 252)">Lista de clientes</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <span style="font-size: 20px">Formulario Novo Cliente</span>

                    <form method="POST" action="{{ route('novoCliente') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Nome')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                        </div>

                        <!-- Cidade -->
                        <div class="mt-4">
                            <x-label for="cidade" :value="__('Cidade')" />

                            <x-input id="cidade" class="block mt-1 w-full"
                                            type="text"
                                            name="cidade"
                                            required autocomplete="new-cidade" />
                        </div>

                        <!-- Uf -->
                        <div class="mt-4">
                            <x-label for="uf" :value="__('Uf')" />

                            <x-input id="uf" class="block mt-1 w-full"
                                            type="text"
                                            name="uf" required />
                        </div>

                         <!-- docNumber -->
                         <div class="mt-4">
                            <x-label for="docNumber" :value="__('Cpf')" />

                            <x-input id="docNumber" class="block mt-1 w-full"
                                            type="text"
                                            name="docNumber" required />
                        </div>

                         <!-- Gender -->
                         <div class="mt-4">
                            <x-label for="gender" :value="__('Genero')" />

                            <x-input id="gender" class="block mt-1 w-full"
                                            type="text"
                                            name="gender" required />
                        </div>

                        <!-- Phone -->
                        <div class="mt-4">
                            <x-label for="phone" :value="__('Telefone')" />

                            <x-input id="phone" class="block mt-1 w-full"
                                            type="tel"
                                            name="phone" required />
                        </div>
                        <div class="flex items-center justify-end mt-4">

                            @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" style="width: 100%" role="alert">
                                <strong>{!! trans('') !!}</strong>{{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                           </div>
                            @endif

                            <x-button class="ml-4">
                                {{ __('Criar') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
