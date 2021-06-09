<x-layouts.default>
    <x-slot name="main">
        <h1>Inspection results</h1>

        <div x-data="inspectionResults()">
            <ol class="flex flex-row flex-wrap gap-4">
                <template x-for="result in results" :key="result">
                    <li class="bg-white px-4 py-3 rounded shadow" x-text="result"></li>
                </template>
            </ol>

            <button class="bg-indigo-700 px-6 py-5 text-indigo-50 rounded" type="submit" @click="fetchResults()" :disabled="isLoading">Fetch Results</button>
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
