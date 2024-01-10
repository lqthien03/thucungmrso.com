var products = @json(products);

for (var i = 0; i < products.length; i++) {
    document.write(`
        <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "Product",
                "name": "${products[i].name}",
                "image": "${products[i].image}",
                "description": "${products[i].description}",
                "brand": {
                    "@type": "Brand",
                    "name": "${products[i].brand}"
                },
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "VND",
                    "price": "${products[i].price}",
                    "availability": "http://schema.org/InStock"
                }
            }
        </script>
    `);
}
