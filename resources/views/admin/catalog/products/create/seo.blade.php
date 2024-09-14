{{-- SEO Settings Section --}}
<fieldset class="border border-gray-300 p-6 rounded-md mb-6">
    <legend class="text-lg font-semibold text-gray-700 px-2">SEO Settings</legend>

    <div class="bg-gray-50 p-4 mb-6 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">SEO Meta</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Meta Title --}}
            <div class="mb-4">
                <label for="meta_title" class="block text-sm font-medium text-gray-700">Meta Title</label>
                <input type="text" wire:model.defer="seo.meta_title" id="meta_title" @class([
                    'mt-1 block w-full border p-2 rounded-md',
                    'border-red-500' => $errors->has('seo.meta_title'),
                    'border-gray-300' => !$errors->has('seo.meta_title'),
                ])
                    placeholder="Enter SEO meta title">
                @error('seo.meta_title')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Meta Description --}}
            <div class="mb-4">
                <label for="meta_description" class="block text-sm font-medium text-gray-700">Meta Description</label>
                <textarea wire:model.defer="seo.meta_description" id="meta_description" rows="3" @class([
                    'mt-1 block w-full border p-2 rounded-md',
                    'border-red-500' => $errors->has('seo.meta_description'),
                    'border-gray-300' => !$errors->has('seo.meta_description'),
                ])
                    placeholder="Enter SEO-friendly meta description"></textarea>
                @error('seo.meta_description')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Meta Keywords --}}
            <div class="mb-4">
                <label for="meta_keywords" class="block text-sm font-medium text-gray-700">Meta Keywords</label>
                <input type="text" wire:model.defer="seo.meta_keywords" id="meta_keywords"
                    @class([
                        'mt-1 block w-full border p-2 rounded-md',
                        'border-red-500' => $errors->has('seo.meta_keywords'),
                        'border-gray-300' => !$errors->has('seo.meta_keywords'),
                    ]) placeholder="Enter SEO keywords (comma-separated)">
                @error('seo.meta_keywords')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    {{-- Schema Markup Section --}}
    <div class="bg-gray-50 p-4 mb-6 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">Schema Markup</h2>
        <div class="mb-4">
            <label for="schema_markup" class="block text-sm font-medium text-gray-700">Schema Markup (JSON-LD)</label>
            <textarea wire:model.defer="seo.schema_markup" id="schema_markup" rows="6" @class([
                'mt-1 block w-full border p-2 rounded-md',
                'border-red-500' => $errors->has('seo.schema_markup'),
                'border-gray-300' => !$errors->has('seo.schema_markup'),
            ])
                placeholder="Enter product schema in JSON-LD format"></textarea>
            @error('seo.schema_markup')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>

    {{-- Open Graph Tags Section --}}
    <div class="bg-gray-50 p-4 mb-6 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">Open Graph & Social Media Tags</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Canonical URL --}}
            <div class="mb-4">
                <label for="canonical_url" class="block text-sm font-medium text-gray-700">Canonical URL</label>
                <input type="url" wire:model.defer="seo.canonical_url" id="canonical_url"
                    @class([
                        'mt-1 block w-full border p-2 rounded-md',
                        'border-red-500' => $errors->has('seo.canonical_url'),
                        'border-gray-300' => !$errors->has('seo.canonical_url'),
                    ]) placeholder="Enter canonical URL">
                @error('seo.canonical_url')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Open Graph Tags --}}
            <div class="mb-4">
                <label for="og_tags" class="block text-sm font-medium text-gray-700">Open Graph Tags</label>
                <textarea wire:model.defer="seo.og_tags" id="og_tags" rows="3" @class([
                    'mt-1 block w-full border p-2 rounded-md',
                    'border-red-500' => $errors->has('seo.og_tags'),
                    'border-gray-300' => !$errors->has('seo.og_tags'),
                ])
                    placeholder="Enter custom Open Graph tags for social media"></textarea>
                @error('seo.og_tags')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    {{-- Alt Text for Images Section --}}
    <div class="bg-gray-50 p-4 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">Alt Text for Images</h2>
        <div class="mb-4">
            <label for="alt_text" class="block text-sm font-medium text-gray-700">Image Alt Text</label>
            <input type="text" wire:model.defer="seo.alt_text" id="alt_text" @class([
                'mt-1 block w-full border p-2 rounded-md',
                'border-red-500' => $errors->has('seo.alt_text'),
                'border-gray-300' => !$errors->has('seo.alt_text'),
            ])
                placeholder="Enter alt text for images">
            @error('seo.alt_text')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>
</fieldset>
