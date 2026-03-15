@extends('layouts.app')

@section('title', 'FAQs')

@section('content')

<section class="max-w-3xl mx-auto px-6 py-16">

    <h1 class="text-4xl font-bold text-center mb-10">
        Frequently Asked Questions
    </h1>

    <div class="space-y-4">

        <x-faq-item
            question="Can I customize the size of the bracelets I will order?"
            answer="Yes, you can customize the size of the bracelets. Kindly check out with the option 'custom' and add the preferred size to the notes before checking out."
        />

        <x-faq-item
            question="When are you shipping my order?"
            answer="We usually ship orders 1–3 days after you have placed your order. This may depend on the availability of the product and the courier."
        />

        <x-faq-item
            question="How long will the shipping take?"
            answer="Shipping duration depends on your location and the courier. For reference, we are located in Laguna, Philippines."
        />

        <x-faq-item
            question="I received a defective/damaged product, what can I do?"
            answer="Please contact us through 'Chat with Seller' and provide a picture or video proof of the issue so we can assist you."
        />

        <x-faq-item
            question="I have received less or wrong product/size, what can I do?"
            answer="We highly advise taking a video before opening the parcel. Please contact us immediately and provide proof so we can resolve the issue as soon as possible.  
            In the case where no video was taken, please do not hesitate to contact us to resolve the matter."
        />

    </div>

</section>

@endsection