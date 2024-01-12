@push('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    @vite('resources/css/dashboard.css')
@endpush

@push('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    @vite('resources/js/dashboard.js')
@endpush

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <i class="fas fa-tachometer-alt mr-1"></i>
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- Header --}}
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="docs-homescreen-item-section">
                        <div class="docs-homescreen-templates-templateview docs-homescreen-templates-templateview-showcase docs-homescreen-itemview-disabled"
                            role="option" id=":1i" tabindex="-1" aria-disabled="true">
                            <div class="docs-homescreen-templates-templateview-preview docs-homescreen-templates-templateview-preview-showcase"
                                aria-labelledby=":1i">
                                <div
                                    class="docs-homescreen-templates-templateview-preview-overlay docs-homescreen-templates-templateview-preview-showcase-overlay">
                                </div>
                                <img src="https://ssl.gstatic.com/docs/templates/thumbnails/docs-blank-googlecolors.png"
                                    alt="" data-nsfw-filter-status="sfw" style="visibility: visible;">
                            </div>
                            <div class="docs-homescreen-templates-templateview-caption">
                                <div class="docs-homescreen-templates-templateview-metadata">
                                    <div title="Blank document" class="docs-homescreen-templates-templateview-title">
                                        Blank document</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Editor --}}
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div id="editor-container" class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- Input Form for Doc Name --}}
                    <div class="rounded">
                        {{-- Save Button --}}
                        <div class="rounded float-right">
                            <button id="save"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                <i class="fas fa-save mr-1"></i>
                                Save
                            </button>
                        </div>
                        {{-- Clear Button --}}
                        <div class="rounded float-right mr-2">
                            <button id="clear"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                <i class="fas fa-trash mr-1"></i>
                                Clear
                            </button>
                        </div>
                        {{-- Doc Name Input --}}
                        <label for="doc-title"></label>
                        <input id="doc-title"
                            class="bg-gray-200 dark:bg-gray-700 text-gray-900 dark:text-gray-100 font-bold py-2 px-4 rounded"
                            name="doc-title" type="text" placeholder="Title">
                    </div>
                    {{-- Editor --}}
                    <div id="editor-js"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Docs Table --}}
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table id="docs-data-table" class="display">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
