SELECT
  clients.id_clients,
  brand.brand
FROM clients
  INNER JOIN product
    ON clients.id_product = product.id_product
  INNER JOIN brand
    ON product.id_brand = brand.id_brand
WHERE brand.id_brand = 1