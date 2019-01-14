package br.com.paggi.api.dao.impl;

import javax.persistence.EntityManager;

import br.com.paggi.api.dao.CartaoCreditoDAO;
import br.com.paggi.api.entity.CartaoCredito;

public class CartaoCreditoDAOImpl extends GenericDAOImpl<CartaoCredito, Integer> implements CartaoCreditoDAO{
	
	public CartaoCreditoDAOImpl(EntityManager em) {
		super(em);
	}

}
