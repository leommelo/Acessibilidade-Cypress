describe('Testes básicos', () => {
  let email;

  it('Cadastrar', () => {
    const timestamp = new Date().getTime();
    email = `emailTeste${timestamp}@teste.com`;

    cy.visit('http://127.0.0.1:8000/register')
    cy.get('#name').type(`Fulano Ciclano${timestamp}`)
    cy.get('#email').type(email)
    cy.get('#password').type("12345678")
    cy.get('#password_confirmation').type("12345678")
    cy.contains('Register').click()

    cy.get('.nav-link')
  })

  it('Login', () =>{
    cy.visit('http://127.0.0.1:8000/login')
    cy.get('#email').type(email)
    cy.get('#password').type("12345678")
    cy.contains('Log in').click()

    cy.get('.nav-link')
  })
})