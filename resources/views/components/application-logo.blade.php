@php
    $companyInformation = Helper::getCompanyInformation();
@endphp

@if ($companyInformation && $companyInformation->logo_path)
    <img class="w-20 h-20 fill-current text-gray-500 object-cover" src="{{ asset('storage/img/company/' . $companyInformation->logo_path) }}" />
@else
    <!-- Handle case when company information or logo path is not available -->
    <span>kegs-pay-logo</span>
@endif
