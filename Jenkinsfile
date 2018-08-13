pipeline {
  agent {
    label 'node1'
  }
  options {
    buildDiscarder(logRotator(numToKeepStr: '5'))
  }
  stages {
    stage('Install packages'){
      steps{
        sh 'composer install'
      }
    }
    stage('BrowserStack Testing'){
      steps{
        browserstack('devsil-browserstack') {
          sh 'composer single'
        }
      }
    }
  }
}
