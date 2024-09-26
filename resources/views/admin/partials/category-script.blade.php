<script>
    document.getElementById('master_id').addEventListener('change', function() {
        var masterId = this.value;

        var categorySelect = document.getElementById('category_id');
        categorySelect.innerHTML = '<option value="">Select Kategori</option>';

        if (masterId) {
            fetch('/admin/filter-categories/' + masterId)
                .then(response => response.json())
                .then(data => {
                    data.forEach(function(category) {
                        var option = document.createElement('option');
                        option.value = category.id;
                        option.text = category.category;
                        categorySelect.appendChild(option);
                    });
                });
        }
    });
</script>
