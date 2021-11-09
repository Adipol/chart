<div>
    <div class="container p-4 mx-auto space-y-4 sm:p-0">
        <ul class="flex flex-col sm:flex-row sm:space-x-8 sm:items-center">
            <li>
                <input type="checkbox" value="travel" wire:model="types" />
                <span>Travel</span>
            </li>
            <li>
                <input type="checkbox" value="shopping" wire:model="types" />
                <span>Shopping</span>
            </li>
            <li>
                <input type="checkbox" value="food" wire:model="types" />
                <span>Food</span>
            </li>
            <li>
                <input type="checkbox" value="entertainment" wire:model="types" />
                <span>Entertainment</span>
            </li>
            <li>
                <input type="checkbox" value="other" wire:model="types" />
                <span>Other</span>
            </li>
        </ul>
        <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
            <div class="flex-1 p-4 bg-white border rounded shadow" style="height: 32rem;">
                <livewire:livewire-column-chart key="{{ $columnChartModel->reactiveKey() }}"
                    :column-chart-model="$columnChartModel" />
            </div>
            <div class="flex-1 p-4 bg-white border rounded shadow" style="height: 32rem;">
                <livewire:livewire-pie-chart key="{{ $pieChartModel->reactiveKey() }}"
                    :pie-chart-model="$pieChartModel" />
            </div>
        </div>
        <div class="p-4 bg-white border rounded shadow" style="height: 32rem;">
            <livewire:livewire-line-chart key="{{ $lineChartModel->reactiveKey() }}"
                :line-chart-model="$lineChartModel" />
        </div>
        <div class="p-4 bg-white border rounded shadow" style="height: 32rem;">
            <livewire:livewire-area-chart key="{{ $areaChartModel->reactiveKey() }}"
                :area-chart-model="$areaChartModel" />
        </div>
    </div>
    <livewire:scripts />
    @livewireChartsScripts
</div>
