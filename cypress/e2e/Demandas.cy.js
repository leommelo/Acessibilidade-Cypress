describe('Criação e acesso de uma demanda', () => {
  it('Criação de uma nova demanda', () => {
    cy.visit('http://127.0.0.1:8000/')
    cy.get('#email').type("emailteste@teste.com")
    cy.get('#password').type("12345678")
    cy.contains('Log in').click()

    cy.get('.cadastrar_demanda').click()
    cy.get('#meu_formulario > :nth-child(2) > .entrada').type('Demanda teste')
    cy.get('#descricao').type('DESCRIÇÃO DESCRIÇÃO DESCRIÇÃO DESCRIÇÃO DESCRIÇÃO DESCRIÇÃO DESCRIÇÃO DESCRIÇÃO DESCRIÇÃO DESCRIÇÃO DESCRIÇÃO DESCRIÇÃO ')
    cy.get('#url_input').type('teste.com')
    cy.get('#nome_input').type('SITE TESTE')
    cy.get('.botao_pagina').click()
    cy.get('#senha').type('12345678')
    cy.get('#confirmar_senha').type('12345678')
    cy.get('.botao_final').click()

    cy.get('.demanda').should('contain', 'Demanda teste')
  })

  it.only('Acessando uma demanda com senha', () => {
    cy.visit('http://127.0.0.1:8000/')
    cy.get('#email').type("emailteste@teste.com")
    cy.get('#password').type("12345678")
    cy.contains('Log in').click()

    cy.get('input[name="password"]').eq(0).type('12345678')
    cy.get('.button')
  })
})