import React, { useState } from 'react';
import { useHistory } from 'react-router-dom'; // Para navegação
import './login.css';

const Login: React.FC = () => {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const [errorMessage, setErrorMessage] = useState(''); 
  const history = useHistory();

  
  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();

    
    if (email === 'usuario@exemplo.com' && password === 'senha123') {
     
      history.push('/home');
    
      setErrorMessage('Email ou senha incorretos');
    }
  };

  
  const handleInputChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    setErrorMessage(''); 
    if (e.target.id === 'email') {
      setEmail(e.target.value);
    } else if (e.target.id === 'password') {
      setPassword(e.target.value);
    }
  };

  return (
    <div className="login-container">
      <h2 className="login-title">Tela de Login</h2>
      <form onSubmit={handleSubmit}>
        <div className="input-field">
          <label htmlFor="email">Email</label>
          <input
            type="email"
            id="email"
            value={email}
            onChange={handleInputChange}
            required
            placeholder="Digite seu e-mail"
          />
        </div>
        <div className="input-field">
          <label htmlFor="password">Senha</label>
          <input
            type="password"
            id="password"
            value={password}
            onChange={handleInputChange}
            required
            placeholder="Digite sua senha"
          />
        </div>

        {}
        {errorMessage && <p className="error-message">{errorMessage}</p>}

        <button type="submit" className="login-button">
          Entrar
        </button>
      </form>
    </div>
  );
};

export default Login;
