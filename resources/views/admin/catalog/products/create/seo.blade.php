{{-- SEO Settings Section --}}
<fieldset class="border border-gray-300 p-6 rounded-md mb-6">
    <legend class="text-lg font-semibold text-gray-700 px-2">SEO Settings</legend>

    <div class="bg-gray-50 p-4 mb-6 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">SEO Meta</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Meta Title --}}
            <div class="mb-4">
                <label for="meta_title" class="block text-sm font-medium text-gray-700">Meta Title</label>
                <input type="text" name="meta_title" id="meta_title"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md" placeholder="Enter SEO meta title">
            </div>

            {{-- Meta Description --}}
            <div class="mb-4">
                <label for="meta_description" class="block text-sm font-medium text-gray-700">Meta Description</label>
                <textarea name="meta_description" id="meta_description" class="mt-1 block w-full border border-gray-300 p-2 rounded-md"
                    rows="3" placeholder="Enter SEO-friendly meta description"></textarea>
            </div>

            {{-- Meta Keywords --}}
            <div class="mb-4">
                <label for="meta_keywords" class="block text-sm font-medium text-gray-700">Meta Keywords</label>
                <input type="text" name="meta_keywords" id="meta_keywords"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md"
                    placeholder="Enter SEO keywords (comma-separated)">
            </div>
        </div>
    </div>

    {{-- Schema Markup Section --}}
    <div class="bg-gray-50 p-4 mb-6 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">Schema Markup</h2>
        <div class="mb-4">
            <label for="schema_markup" class="block text-sm font-medium text-gray-700">Schema Markup (JSON-LD)</label>
            <textarea name="schema_markup" id="schema_markup" class="mt-1 block w-full border border-gray-300 p-2 rounded-md"
                rows="6" placeholder="Enter product schema in JSON-LD format"></textarea>
        </div>
    </div>

    {{-- Open Graph Tags Section --}}
    <div class="bg-gray-50 p-4 mb-6 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">Open Graph & Social Media Tags</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Canonical URL --}}
            <div class="mb-4">
                <label for="canonical_url" class="block text-sm font-medium text-gray-700">Canonical URL</label>
                <input type="url" name="canonical_url" id="canonical_url"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md" placeholder="Enter canonical URL">
            </div>

            {{-- Open Graph Tags --}}
            <div class="mb-4">
                <label for="og_tags" class="block text-sm font-medium text-gray-700">Open Graph Tags</label>
                <textarea name="og_tags" id="og_tags" class="mt-1 block w-full border border-gray-300 p-2 rounded-md" rows="3"
                    placeholder="Enter custom Open Graph tags for social media"></textarea>
            </div>
        </div>
    </div>

    {{-- Alt Text for Images Section --}}
    <div class="bg-gray-50 p-4 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">Alt Text for Images</h2>
        <div class="mb-4">
            <label for="alt_text" class="block text-sm font-medium text-gray-700">Image Alt Text</label>
            <input type="text" name="alt_text" id="alt_text"
                class="mt-1 block w-full border border-gray-300 p-2 rounded-md" placeholder="Enter alt text for images">
        </div>
    </div>
</fieldset>
