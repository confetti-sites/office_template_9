@php
    /**
     * @var \Confetti\Helpers\ComponentStore $componentStore
     * @var \Confetti\Helpers\ComponentEntity $component
     * @var \Confetti\Helpers\ContentStore $contentStore
     * @var string $contentId
     */
@endphp
<label class="block mt-4 text-sm">
    <span class="">
        {{ $component->getDecoration('label')['value'] }}
    </span>
    <input
            type="number"
            x-bind="field"
            class="block w-full mt-1 placeholder-gray-400 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:focus:ring-gray focus-within:text-primary-600 dark:focus-within:text-primary-400 dark:placeholder-gray-500 dark:focus:placeholder-gray-600 focus:placeholder-gray-300"
            placeholder="{{ $component->getDecoration('placeholder')['value'] }}"
            name="{{ $contentId }}"
            value="{{ $contentStore->find($component->key) ?? $component->getDecoration('default')['value'] }}"
    >
</label>
