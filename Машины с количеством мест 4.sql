SELECT
  brand.brand,
  product.model,
  technical_data.number_of_seats
FROM technical_data
  INNER JOIN product
    ON technical_data.id_product = product.id_product
  INNER JOIN brand
    ON product.id_brand = brand.id_brand
WHERE technical_data.number_of_seats = 4