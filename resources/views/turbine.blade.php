<x-layouts.default>
    <x-slot name="main">
        <div class="bg-white flex flex-col flex-nowrap max-w-5xl mx-auto rounded-lg shadow-lg md:flex-row-reverse">
            <div class="h-48 rounded-t-lg overflow-hidden md:h-auto md:rounded-l-none md:rounded-r-lg md:w-1/3">
                <img class="object-fit w-full md:h-full md:object-cover" src="/images/wind-turbine.jpg" />
            </div>

            <div class="p-8 md:w-2/3">
                <h2 class="font-bold text-xl">Wind Station Zebra</h2>
                <p class="mt-2 text-gray-600">Situated 10 miles off the coast of Norway, Zebra enjoys year-round bracing winds, midnight sun, and disgruntled fishermen.</p>

                <h3 class="font-bold mt-6">Status history</h3>
                <div x-data="inspectionResults()">
                    <div x-show="results.length > 0">
                        <ol class="flex flex-row flex-wrap gap-x-2 gap-y-3 mt-4 text-sm">
                            <template x-for="result in results" :key="result">
                                <li class="bg-gray-50 px-2 py-1 rounded-sm text-gray-600" x-text="result"></li>
                            </template>
                        </ol>
                    </div>

                    <div class="mt-4">
                        <button class="border border-indigo-300 px-3 py-2 text-indigo-900 text-sm rounded transition hover:bg-indigo-50" type="submit" :disabled="isLoading" @click="fetchResults()">Refresh Status</button>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    @push('scripts')
    <script>
        function inspectionResults() {
            return {
                // Properties
                isLoading: false,
                results: [],

                // Methods
                fetchResults() {
                    this.isLoading = true

                    fetch(new Request('/api/turbines'))
                        .then(response => {
                            if (!response.ok) {
                                throw new Error()
                            }
                            return response
                        })
                        .then(response => response.json())
                        .then(json => this.results = json.data)
                        .catch(error => this.results = ['Unable to load data'])
                        .finally(() => this.isLoading = false)
                }
            }
        }
    </script>
    @endpush
</x-layouts.default>

</body>

</html>
