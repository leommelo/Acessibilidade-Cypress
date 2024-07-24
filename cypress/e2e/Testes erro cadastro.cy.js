describe('Testes de campo vazio', () => {
  it('Nome vazio', () => {
    cy.visit('http://127.0.0.1:8000/register')
    cy.get('#email').type("emailTeste@teste.com")
    cy.get('#password').type("12345678")
    cy.get('#password_confirmation').type("12345678")
    cy.get('.inline-flex').click()
    cy.get('#name').then(($input) => {
      expect($input[0].validationMessage).to.eq('Preencha este campo.');
    });
  })

  it('Email vazio', () => {
    cy.visit('http://127.0.0.1:8000/register')
    cy.get('#name').type("Fulano")
    cy.get('#password').type("12345678")
    cy.get('#password_confirmation').type("12345678")
    cy.get('.inline-flex').click()
    cy.get('#email').then(($input) => {
      expect($input[0].validationMessage).to.eq('Preencha este campo.');
    });
  })

  it('Senha vazia', () => {
    cy.visit('http://127.0.0.1:8000/register')
    cy.get('#name').type("Fulano")
    cy.get('#email').type("emailTeste@teste.com")
    cy.get('#password_confirmation').type("12345678")
    cy.get('.inline-flex').click()
    cy.get('#password').then(($input) => {
      expect($input[0].validationMessage).to.eq('Preencha este campo.');
    });
  })

  it('Confirmação de senha vazio', () => {
    cy.visit('http://127.0.0.1:8000/register')
    cy.get('#name').type("Fulano")
    cy.get('#email').type("emailTeste@teste.com")
    cy.get('#password').type("12345678")
    cy.get('.inline-flex').click()
    cy.get('#password_confirmation').then(($input) => {
      expect($input[0].validationMessage).to.eq('Preencha este campo.');
    });
  })
})

describe('Testes de invalidez', () => {
  it('Email invalido', () => {
    cy.visit('http://127.0.0.1:8000/register')
    cy.get('#name').type("Fulano")
    cy.get('#email').type("emailTeste.com")
    cy.get('#password').type("12345678")
    cy.get('#password_confirmation').type("12345678")
    cy.get('.inline-flex').click()
    cy.get('#email').then(($input) => {
      expect($input[0].validationMessage).to.include('Inclua um "@" no endereço de email.');
    });
  })

  it('Email já existente', () => {
    cy.visit('http://127.0.0.1:8000/register')
    cy.get('#name').type("Fulano")
    cy.get('#email').type("emailTeste@teste.com")
    cy.get('#password').type("12345678")
    cy.get('#password_confirmation').type("12345678")
    cy.get('.inline-flex').click()
    cy.contains("The email has already been taken.")
  })

  it('Senha invalida', () => {
    cy.visit('http://127.0.0.1:8000/register')
    cy.get('#name').type("Fulano")
    cy.get('#email').type("emailTeste2@teste.com")
    cy.get('#password').type("123")
    cy.get('#password_confirmation').type("123")
    cy.get('.inline-flex').click()
    cy.contains("The password field must be at least 8 characters.")
  })

  it('Confirmação de senha invalida', () => {
    cy.visit('http://127.0.0.1:8000/register')
    cy.get('#name').type("Fulano")
    cy.get('#email').type("emailTeste2@teste.com")
    cy.get('#password').type("12345678")
    cy.get('#password_confirmation').type("123")
    cy.get('.inline-flex').click()
    cy.contains("The password field confirmation does not match.")
  })
})