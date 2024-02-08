<script>
    window.locale = '{{ app()->getLocale() }}';
    window._translations = @json($translations);
</script>
