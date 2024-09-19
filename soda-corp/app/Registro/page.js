import React, { useState } from 'react';

const LoginForm = () => {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');

  const handleSubmit = (e) => {
    e.preventDefault();
    console.log('Email:', email);
    console.log('Password:', password);
  };

  return (
    <div style={styles.container}>
      <div style={styles.formWrapper}>
        <h2 style={styles.heading}>Welcome Back</h2>
        <p style={styles.subheading}>Sign in to your account to continue</p>
        <form onSubmit={handleSubmit} style={styles.form}>
          <div style={styles.formGroup}>
            <label htmlFor="email" style={styles.label}>Email</label>
            <input
              type="email"
              id="email"
              value={email}
              onChange={(e) => setEmail(e.target.value)}
              placeholder="name@example.com"
              style={styles.input}
              required
            />
          </div>
          <div style={styles.formGroup}>
            <label htmlFor="password" style={styles.label}>Password</label>
            <input
              type="password"
              id="password"
              value={password}
              onChange={(e) => setPassword(e.target.value)}
              placeholder="Password"
              style={styles.input}
              required
            />
          </div>
          <button type="submit" style={styles.submitButton}>Sign In</button>
        </form>
        <div style={styles.links}>
          <a href="/forgot-password" style={styles.link}>Forgot password?</a>
          <a href="/register" style={styles.link}>Don't have an account? Sign up</a>
        </div>
      </div>
    </div>
  );
};

// Estilos en línea para el formulario
const styles = {
  container: {
    display: 'flex',
    justifyContent: 'center',
    alignItems: 'center',
    height: '100vh',
    backgroundColor: '#1a1a40',
  },
  formWrapper: {
    padding: '40px',
    backgroundColor: '#fff',
    borderRadius: '8px',
    boxShadow: '0px 4px 12px rgba(0, 0, 0, 0.1)',
    textAlign: 'center',
    width: '350px',
  },
  heading: {
    margin: '0',
    fontSize: '24px',
    color: '#d32f2f', 
  },
  subheading: {
    marginBottom: '20px',
    color: '#666',
  },
  form: {
    width: '100%',
  },
  formGroup: {
    marginBottom: '20px',
    textAlign: 'left',
  },
  label: {
    display: 'block',
    marginBottom: '8px',
    color: '#333',
    fontWeight: 'bold',
  },
  input: {
    width: '100%',
    padding: '10px',
    borderRadius: '4px',
    border: '1px solid #ccc',
    fontSize: '16px',
  },
  submitButton: {
    width: '100%',
    padding: '12px',
    backgroundColor: '#d32f2f', 
    color: '#fff',
    border: 'none',
    borderRadius: '4px',
    fontSize: '16px',
    cursor: 'pointer',
  },
  links: {
    marginTop: '20px',
    display: 'flex',
    justifyContent: 'space-between',
    fontSize: '14px',
  },
  link: {
    color: '#d32f2f', 
    textDecoration: 'none',
  },
};

export default LoginForm;