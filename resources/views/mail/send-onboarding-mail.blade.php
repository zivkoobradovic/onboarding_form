<body>
    <h1 class="bg-red-500">Test</h1>
<h1>Digistore Team Member Contact Name</h1>

<p>Name: {{ $onb->manager->name}}</p>
<p>Manager email: {{ $onb->manager->email}}</p>
<h1>Contact Information</h1>
<p>Full name: {{ $onb->contact_info->full_name}}</p>
<p>Contact Email: {{$onb->contact_info->email}}</p>
<p>Phone: {{ $onb->contact_info->phone }}</p>
<p>Time Zone: {{ $onb->contact_info->time_zone }}</p>
<p>Company Name: {{ $onb->contact_info->company_name }}</p>
<p>Skype/Zoom: {{ $onb->contact_info->skype_zoom }}</p>
<h1>Digistore24 / Svencart</h1>
<p>Digistore24/SvenCart Username: {{ $onb->platform->name }}</p>
<p>Password: {{ $onb->platform->password }}</p>
<h1>Product Information</h1>
<p>Product Name: {{ $onb->product->product_name }}</p>
<p>Product Type: {{ $onb->product->product_type }}</p>
<p>Tech Support: {{ $onb->techSupport->status === true ? 'Yes, I have tech support' : 'I haven\'t tech support' }}</p>
@if ($onb->techSupport->status === false)
    <p>Website URL: {{ $onb->techSupport->website_access_url }}</p>
    <p>Website Username: {{ $onb->techSupport->website_access_username }}</p>
    <p>Website Password: {{ $onb->techSupport->website_access_password }}</p>
@endif
<p>Affiliate Comission: {{ $onb->product->affiliate_commission }}</p>
<p>Product Price: {{ $onb->product->product_price }}</p>
<h1>Sales Pages</h1>
<p>Sales Page Type: {{ App\Models\SalesPageType::find($onb->product->sales_page_type)->name }}</p>
<p>Sales Page Url: : <a href="{{ $onb->product->sales_page }}">{{ $onb->product->sales_page }}</a></p>
<p>Sales Thank You Page: <a href="{{ $onb->product->thank_you_page_url }}">{{ $onb->product->thank_you_page_url }}</a></p>
<h1>Upsells / Downsells / OTO</h1>
@foreach ($onb->oto as $key => $oto)
    <h5>Type: {{ $oto->type === '1' ? 'Upsell' : 'Downsell' }}</h5>
    <p>Page Url: <a href="{{ $oto->funnelUrl }}">{{ $oto->funnelUrl }}</a></p>
    <p>Price: {{ $oto->funnelPrice }}</p>
    <p>Affiliate Comission: {{ $oto->funnelCommission }}</p>
    <p>ThankYou Page: <a href="{{ $oto->upsellThankYou }}">{{ $oto->upsellThankYou }}</a> </p>
@endforeach
<h1>Integrations</h1>
@if (!empty($onb->integrationType))
@foreach ($onb->integrationType as $integration)
<p>{{ App\Models\Integration::find($integration)->name }}</p>
@endforeach
@endif
<p>Fulfillment: {{ $onb->fulfillment }}</p>
<p>Custom Integration: {{$onb->customintegration}}</p>
<p>Custom Integration: {{$onb->credentials}}</p>
<h1>Comments</h1>
<p>{{ $onb->comments }}</p>
</body>



