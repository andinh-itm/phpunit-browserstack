pipeline {
  agent {
//    label 'node1'
    docker { image 'composer' }
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
        browserstack('browserstack-test') {
          sh 'composer single'
        }
      }
    }
  }
}
