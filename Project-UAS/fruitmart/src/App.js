// src/App.js
import React, { useState, useEffect } from 'react';
import axios from 'axios';
import NavbarComponent from './components/NavbarComponent';
import CardView from './components/CardView';
import 'bootstrap/dist/css/bootstrap.min.css';

const App = () => {
  const [fruits, setFruits] = useState([]);
  const [selectedCategory, setSelectedCategory] = useState(null);

  useEffect(() => {
    axios.get('//localhost:8000/api/fruits')
      .then((response) => {
        setFruits(response.data);
      })
      .catch((error) => {
        console.error('Error fetching data:', error);
      });
  }, []);

  const handleCategoryClick = (category) => {
    setSelectedCategory(category);
  };

  return (
    <div>
      <NavbarComponent onCategoryClick={handleCategoryClick} />
      <div className="container mt-4">
        <CardView fruits={fruits} selectedCategory={selectedCategory} />
      </div>
    </div>
  );
};

export default App;
