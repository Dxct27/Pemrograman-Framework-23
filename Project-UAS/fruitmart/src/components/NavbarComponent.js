import React from 'react';
import { Nav, Navbar, Container } from 'react-bootstrap';

const NavbarComponent = ({ onCategoryClick }) => {
  const categories = [1, 2, 3];

  // Helper function to get display text for a category
  const getCategoryDisplayText = (category) => {
    switch (category) {
      case 1:
        return 'Big Fruit';
      case 2:
        return 'Medium Fruit';
      case 3:
        return 'Small Fruit';
      default:
        return '';
    }
  };

  return (
    <Navbar variant="dark" expand="lg">
      <Container>
        <Navbar.Brand href="#home">Fruit Dashboard</Navbar.Brand>
        <Navbar.Toggle aria-controls="basic-navbar-nav" />
        <Navbar.Collapse id="basic-navbar-nav">
          <Nav className="me-auto">
            {categories.map((category) => (
              <Nav.Link
                key={category}
                onClick={() => onCategoryClick(category)}
              >
                {getCategoryDisplayText(category)}
              </Nav.Link>
            ))}
          </Nav>
        </Navbar.Collapse>
      </Container>
    </Navbar>
  );
};

export default NavbarComponent;
