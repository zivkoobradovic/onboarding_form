
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="bg-indigo-700 text-white p-5 md:mx-0 mx-3 rounded-lg">
                @foreach($onboardings as $onboarding)
                    <div>
                        <button class="w-full focus:outline-none">
                        <div class="w-full hover:bg-indigo-500 active:bg-indigo-800"
                            {{ $compOpen !== $onboarding->id ? "wire:click=openDetails({$onboarding->id})" : "wire:click=closeDetails()" }}>
                            <div class="flex p-5 border border-gray-400 rounded-lg mb-3 ">
                                <div class="w-1/2">
                                    <div>Contact Person: {{ $onboarding->manager_name }} </div>
                                    <div> {{ $onboarding->manager_email }} </div>
                                </div>
                                <div class="w-1/2">
                                    <div>Product Name:</div>
                                    <div>
                                        {{ $onboarding->product->product_name }}
                                    </div>
                                    <div>Created: {{ $onboarding->created_at}} </div>
                                </div>
                            </div>
                        </div>
                    </button>
                        <div class="flex h-60 w-full bg-indigo-300 rounded-lg mb-5 p-10 {{ $onboarding->id === $compOpen ? "display" : "hidden" }}">
                            <div class="w-1/2">
                                {{ $onboarding->id }}
                                <p> {{ $onboarding->product->product_name }}</p>
                                <p> {{ $onboarding->product->product_type }} </p>
                                <p>{{ $onboarding->techSupport === 'false' ? 'I haven\'t tech support' : 'I have tech support' }}</p>
                                <p>{{ $onboarding->product->affiliate_commission }}</p>
                                <p>{{ $onboarding->product->product_price }}</p>
                            </div>
                            <div class="w-1/2">
                                <p>{{ $onboarding->contact_info->full_name }}</p>
                                <p>{{ $onboarding->contact_info->email }}</p>
                                <p>{{ $onboarding->contact_info->phone }}</p>
                                <p>{{ $onboarding->contact_info->time_zone }}</p>
                                <p>{{ $onboarding->contact_info->company_name }}</p>
                                <p>{{ $onboarding->contact_info->skype_zoom }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

