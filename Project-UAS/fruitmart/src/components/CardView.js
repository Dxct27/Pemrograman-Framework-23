// src/components/CardView.js
import React from 'react';
import { Card, } from 'react-bootstrap';

const CardView = ({ fruits, selectedCategory }) => {
  const filteredFruits = selectedCategory
    ? fruits.filter((fruit) => fruit.category_id === selectedCategory)
    : fruits;

  return (
     <Card style={{ width: '18rem' }}>
      {filteredFruits.map((fruit) => (
        <Card key={fruit.id}>
          <Card.Body>
            <Card.Title>{fruit.name}</Card.Title>
            <Card.Text>
              <strong>Price:</strong> Rp {fruit.price_per_kg}
            </Card.Text>
          </Card.Body>
        </Card>
      ))}
    </Card>
  );
};

export default CardView;
