<?php

namespace App\Http\Livewire\Settings;

use Livewire\Component;
use App\Models\SssContributionRate;
use App\Models\HdmfContributionRate;
use App\Models\PhicContributionRate;
use Carbon\Carbon;

class TaxContributionComponent extends Component
{
    public function render()
    {
        return view('livewire.settings.tax-contribution-component', [
            'sss_contributions' => $this->sssContributionTable,
            'hdmf_contributions' => $this->hdmfContributionTable,
            'phic_contributions' => $this->phicContributionTable,
        ]);
    }

    public function getSssContributionTableProperty()
    {
        $contributionRate = SssContributionRate::latest()->first();
        return $contributionRate ?? null;
    }

    public function getHdmfContributionTableProperty()
    {
        $contributionRates = HdmfContributionRate::where('year', Carbon::now()->format('Y'))->get();
        return $contributionRates->isEmpty() ? null : $contributionRates;
    }

    public function getPhicContributionTableProperty()
    {
        $contributionRates = PhicContributionRate::where('year', Carbon::now()->format('Y'))->get();
        return $contributionRates->isEmpty() ? null : $contributionRates;
    }
}
